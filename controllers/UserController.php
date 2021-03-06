<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\HttpException;

class UserController extends Controller
{
    /**
     * Show user profile.
     * @param $username
     * @return string
     * @throws HttpException
     */
    public function actionView($username)
    {
        /* @var $user User */
        $user = User::findByUsername($username);
        if (is_null($user)) {
            throw new HttpException(404, 'Cooker not found');
        }
        $recipeQuery = $user->getRecipes();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $recipeQuery->count(),
        ]);

        $recipes = $recipeQuery
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('recipe', [
            'user' => $user,
            'recipes' => $recipes,
            'pagination' => $pagination,
            'active' => 'recipes',
        ]);
    }

    /**
     * Get favorite recipes of user.
     * @param $username
     * @return string
     * @throws HttpException
     */
    public function actionFavorites($username)
    {
        /* @var $user User */
        $user = User::findByUsername($username);
        if (is_null($user)) {
            throw new HttpException(404, 'Cooker not found');
        }
        $recipeQuery = $user->getFavorites();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $recipeQuery->count(),
        ]);

        $recipes = $recipeQuery
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('recipe', [
            'user' => $user,
            'recipes' => $recipes,
            'pagination' => $pagination,
            'active' => 'favorites',
        ]);
    }

    /**
     * Get made recipes of user.
     * @param $username
     * @return string
     * @throws HttpException
     */
    public function actionMade($username)
    {
        /* @var $user User */
        $user = User::findByUsername($username);
        if (is_null($user)) {
            throw new HttpException(404, 'Cooker not found');
        }
        $recipeQuery = $user->getCooks();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $recipeQuery->count(),
        ]);

        $recipes = $recipeQuery
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('recipe', [
            'user' => $user,
            'recipes' => $recipes,
            'pagination' => $pagination,
            'active' => 'made',
        ]);
    }

    /**
     * Get following user.
     * @param $username
     * @return string
     * @throws HttpException
     */
    public function actionFollowing($username)
    {
        /* @var $user User */
        $user = User::findByUsername($username);
        if (is_null($user)) {
            throw new HttpException(404, 'Cooker not found');
        }
        $followingQuery = $user->getFollowings();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $followingQuery->count(),
        ]);

        $followings = $followingQuery
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('follower', [
            'user' => $user,
            'users' => $followings,
            'pagination' => $pagination,
            'active' => 'following',
        ]);
    }

    /**
     * Get following user.
     * @param $username
     * @return string
     * @throws HttpException
     */
    public function actionFollowers($username)
    {
        /* @var $user User */
        $user = User::findByUsername($username);
        if (is_null($user)) {
            throw new HttpException(404, 'Cooker not found');
        }
        $followingQuery = $user->getFollowers();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $followingQuery->count(),
        ]);

        $followings = $followingQuery
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('follower', [
            'user' => $user,
            'users' => $followings,
            'pagination' => $pagination,
            'active' => 'followers',
        ]);
    }
}
