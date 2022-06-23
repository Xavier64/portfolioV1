<?php
/*
Plugin Name: monplugin
Plugin URI: 
description: permet de récupérer mes projets sur github pour mon portfolio
Version: 1.0
Author: Xava
*/

if (!function_exists('getGithubData')) :

    function getGithubData($username)
    {

        $url = 'https://api.github.com/users/' . $username . '/repos';
        $response = wp_remote_get($url);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);
        return $data;
    }
endif;
?>

<?php function affGithubData()
{ ?>


    <?php $content = null ?>
    
    <?php $github = getGithubData('Xavier64');
    foreach ($github as $github) {
        ob_start();
    ?>
        <p> <?php echo $github->name  ?> </p>
        <p> <?php echo $github->description  ?> </p>
       <?php $content = ob_get_contents() ?>
        <?php } ?>
        <?php ob_end_clean() ?>
        <?php return $content ?>
<?php }
add_shortcode('affGithubData', 'affGithubData');

?>