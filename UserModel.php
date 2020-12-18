<?php


namespace abubakr\phpmvc;


use abubakr\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName();
}