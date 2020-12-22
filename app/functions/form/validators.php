<?php

use App\App;

/**
 *
 * Checks if user(data) already exists in our saved file.
 *
 * If there is no such data(user) returns true.
 * If the data already exist in file, writes an error and returns false.
 *
 * @param string $field_input - clean input value
 * @param array $field - input array
 * @return bool
 */
function validate_user_unique(string $field_input, array &$field): bool
{
    if (App::$db->getRowWhere('users', ['email' => $field_input])) {
        $field['error'] = 'User already exists';

        return false;
    }

    return true;
}

/**
 *
 *Checks if there is such email in the database.
 *
 * If email of $filtered_input are not in the database(or not the same),
 * writes an error and returns false.
 *
 * @param array $filtered_input - clean inputs array with values
 * @param array $form - form array
 * @return bool
 */

function validate_user_exists(string $field_input, array &$field): bool
{
    if (App::$db->getRowWhere('users', ['email' => $field_input])) {
        return true;
    }

    $field['error'] = 'Toks useris neegzistuoja';

    return false;
}

/**
 * Check if password is same as in database
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_password_ok(string $field_input, array &$field): bool
{
    $user = App::$session->getUser();
    var_dump($user);
    if (App::$db->getRowWhere('users', ['password' => $field_input])) {
        return true;
    }

    $field['error'] = 'Slaptažodis netinka';

    return false;
}