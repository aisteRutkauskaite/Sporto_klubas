<?php

// //////////////////////////////
// [1] FORM VALIDATORS
// //////////////////////////////

/**
 * Check if field values are the same
 *
 * @param $form_values
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match($form_values, array &$form, array $params): bool
{
    foreach ($params as $field_index) {
        if ($form_values[$params[0]] !== $form_values[$field_index]) {
            $form['fields'][$field_index]['error'] = strtr('Field does not match with @field field', [
                '@field' => $form['fields'][$params[0]]['label']
            ]);

            return false;
        }
    }

    return true;
}

// //////////////////////////////
// [2] FIELD VALIDATORS
// //////////////////////////////

/**
 * Check if field is not empty
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty(string $field_value, array &$field): bool
{

    if ($field_value == '') {
        $field['error'] = 'Field must be filled';
        return false;
    }

    return true;
}


/**
 * Check if number is in max range.
 *
 * @param string $field_input
 * @param array $field
 * @param array $params
 * @return bool
 */


function validate_number_of_symbols(string $field_input, array &$field, array $params): bool
{
    if (strlen($field_input) > $params['max']) {
        $field['error'] = strtr('Parašykite iki @max simbolių', [
            '@max' => $params['max']
        ]);
        return false;
    }
    return true;
}

/**
 * Check if provided email is in correct format
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_email(string $field_value, array &$field): bool
{
    if (!preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/', $field_value)) {
        $field['error'] = 'Neteisingas email formatas';

        return false;
    }

    return true;
}


/**
 * Check if input conatains symbols or numbers
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_symbols_and_numbers(string $field_value, array &$field): bool
{
    $field_values_array = str_split($field_value);

    foreach ($field_values_array as $value) {
        if (strtolower($value) === strtoupper($value)) {
            $field['error'] = 'Negalima naudoti simbolių ar numerių';

            return false;
        }
    }

    return true;
}



