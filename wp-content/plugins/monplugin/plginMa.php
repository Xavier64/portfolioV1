<?php
/*
Plugin Name: mPress
Plugin URI:
description: Récupère les répos github
Version: 1.0
Author: Marin P.
Author URI:
License: GPL2
*/


if (!function_exists('rp_getFilm')) :
    function getGithubData()
    {
        $url = 'https://api.github.com/users/Xavier64/repos';
        $response = wp_remote_get($url);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);
        return $data;
    }
endif;
?>

<?php function githubData()
{
    ?>
    <div class="flex flex-col after:h-[3px] after:my-2 after:bg-mPressBlue">
        <h1 class="pr-5 text-mPressBlue">Mes projets</h1>
    </div>
    <div class="grid md:grid-cols-1 lg:grid-cols-2">
            <?php $githubData = getGithubData();
            foreach ($githubData as $githubData) {
            ob_start();
            ?>
    <div class="flex py-5 justify-center">
            <a
                    class="relative block p-8 overflow-hidden border border-gray-100 rounded-lg max-w-[30rem] my-2 mx-3"
                    href="<?php echo $githubData->html_url ?>"
            >
  <span
          class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
  ></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h5 class="text-xl font-bold text-gray-900">
                            <?php echo $githubData->name ?>
                        </h5>
                        <p class="badge mt-1 text-xs font-medium text-white"><?php echo $githubData->owner->login ?></p>
                    </div>

                    <div class="flex-shrink-0 hidden ml-3 sm:block">
                        <img
                                class="object-cover w-16 h-16 rounded-lg shadow-sm"
                                src="./wp-content/plugins/mPress/img/<?php echo $githubData->language . ".png" ?>"
                                alt=""
                        />
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <p class="text-sm text-gray-500">
                        <?php echo $githubData->description ?>
                    </p>
                </div>

                <dl class="flex mt-6">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-600">Publier le</dt>
                        <dd class="text-xs text-gray-500"><?php echo date("F j, Y", strtotime($githubData->created_at)); ?></dd>
                    </div>

                    <div class="flex flex-col-reverse ml-3 sm:ml-6">
                        <dt class="text-sm font-medium text-gray-600">Dernière modif.</dt>
                        <dd class="text-xs text-gray-500"><?php echo date("F j, Y", strtotime($githubData->updated_at)); ?></dd>
                    </div>
                </dl>
            </a>
    </div>
            <?php $content = ob_get_contents() ?>
        <?php } ?>
    <?php ob_end_clean(); ?>
    </div>
    <?php return $content ?>
<?php }

add_shortcode('githubData', 'githubData'); ?>