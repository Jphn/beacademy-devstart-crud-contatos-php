<?php

$contactsPath = './assets/data/contacts.csv';

function signInPage()
{
    include './views/signin.php';
}

function signUpPage()
{
    if ( $_POST ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $file = fopen( __DIR__ . $GLOBALS['contactsPath'], 'a+' );

        fwrite( $file, "{$name};{$email};{$phone}" . PHP_EOL );

        fclose( $file );

        $message = 'Successfully added!';

        include './views/components/alertSuccess.php';
    }

    include './views/signup.php';
}

function homePage()
{
    include './views/home.php';
}

function listPage()
{
    $contacts = file( __DIR__ . $GLOBALS['contactsPath'] );

    include './views/list.php';
}

function deletePage()
{
    $id = $_GET['id'];

    $contacts = file( __DIR__ . $GLOBALS['contactsPath'] );

    unset( $contacts[$id] );

    unlink( __DIR__ . $GLOBALS['contactsPath'] );

    $file = fopen( __DIR__ . $GLOBALS['contactsPath'], 'a+' );

    foreach ( $contacts as $contact ) {
        fwrite( $file, $contact );
    }

    fclose( $file );

    $message = 'Contact successfully deleted!';

    include './views/components/alertSuccess.php';
}
function updatePage()
{
    $id = $_GET['id'];

    $contacts = file( __DIR__ . $GLOBALS['contactsPath'] );

    if ( $_POST ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $contacts[$id] = "{$name};{$email};{$phone}" . PHP_EOL;

        unlink( __DIR__ . $GLOBALS['contactsPath'] );

        $file = fopen( __DIR__ . $GLOBALS['contactsPath'], 'a+' );

        foreach ( $contacts as $contact ) {
            fwrite( $file, $contact );
        }

        fclose( $file );

        $message = 'Successfully updated!';

        include './views/components/alertSuccess.php';
    }

    $data = explode( ';', $contacts[$id] );

    include './views/update.php';
}

function notFound404Page()
{
    include './views/list.php';
}