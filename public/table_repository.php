<?php
/**
 *  @author   Rauvtovich Yauhen
 *   @copyright Y.Rauvtovich 2018
 *   @license   GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit;
add_action('admin_print_footer_scripts', ['Yaurau_IP_Blocker_View', 'includeAjax'], 99);
?>
<table id="respondsRepository" class="yibTable">
    <thead>
        <tr>
            <th>#</th>
        <th>IP</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $gen = Yaurau_IP_Blocker::getidIPRepository();
        foreach ($gen as $key=>$row) {
            echo '<tr id="item_'.$row["id"].'">';
            echo '<td>'. ($key+1) .  '</td>';
            echo '<td>' . $row["IP"].'</td>';
            echo '<td class="del_wrapper"><button class="yibButton" id="del-' .$row["id"].'">DELETE</button></td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>




