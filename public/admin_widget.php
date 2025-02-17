<?php
/**
 *  @author   Rauvtovich Yauhen
 *   @copyright Y.Rauvtovich 2018
 *   @license   GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<h2><?php echo get_admin_page_title() ?></h2>
<p>
    <h3>You IP adress</h3>
    <h4>You IP adress: <?php echo $_SERVER ['REMOTE_ADDR']?></h4>
</p>
<p>
    <h3>Add IPv4</h3>
</p>
    <?php include_once __DIR__ . '/add_IPv4.php';?>
<p>
    <h3>Add IPv6</h3>
</p>
    <?php
    include_once __DIR__ . '/add_IPv6.php';
    ?>
<form action="options.php" method="POST">
    <?php
    settings_fields( 'new_option' );     // скрытые защитные поля - nonce
    do_settings_sections( Yaurau_IP_Blocker_PAGE ); // секции с настройками (опциями). У нас она всего одна 'section_id'
    submit_button();
    echo get_option('some_other_option');
    ?>
</form>

<?php if(!empty(Yaurau_IP_Blocker_DB::loadIPDB())){ ?>
    <p><h3>Blocked IP</h3></p>
    <?php include_once __DIR__ . '/table_blocked_ IP.php';
}
?>
<?php if(!empty(Yaurau_IP_Blocker_DB::loadIPRepository())){ ?>
    <p><h3>On the day of the blocked IP address</h3></p>
    <?php include_once __DIR__ . '/table_repository.php';
}
?>









