<?php
/**
 * hit steps - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package hitsteps
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php if ($hit_steps_code):  ?>
<!-- Hitsteps TRACKING CODE - Manual 2019-12-03 - DO NOT CHANGE -->
<script type="text/javascript">
    (function ()
    {
        var hstc = document.createElement('script');
        hstc.src = 'https://log.hitsteps.com/track.php?code=<?=___h($hit_steps_code) ?>';
        hstc.async = true;
        var htssc = document.getElementsByTagName('script')[0];
        htssc.parentNode.insertBefore(hstc, htssc);
    })();
</script>
<noscript>
<a href="http://www.hitsteps.com/"><img src="//log.hitsteps.com/track.php?mode=img&amp;code=<?=___h($hit_steps_code) ?>" alt="blog statistics" width="1" height="1" />web stats</a>
</noscript>
<!-- Hitsteps TRACKING CODE - DO NOT CHANGE -->

<?php else: ?>
    <x-ui:alert type="danger">
        <?= ___('Clicky tracking number has not been provided') ?>
    </x-ui:alert>

<?php endif ?>