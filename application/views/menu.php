<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $this->uri->segment(1); // the class
// $this->uri->segment(2); // the function
// $this->uri->segment(3); // the ID

?><!DOCTYPE html>
<script>
jQuery(document).ready(function() {
    UIToastr.init();

    function getHeight(){
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return e[a + 'Height'];
    }

    function getWidth(){
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return e[a + 'Width'];
    }

    set_height();

    $(window).resize(function(){
        set_height();
    });

    function set_height(){
        var center_height = 0,head = $("#header").outerHeight(true),foot = $("#footer").outerHeight(true);
        center_height = getHeight() - 132;
        $("#continer").css('min-height',center_height);
        $('#drug_left').css('height',center_height-130);
    }
});
$(function(){
    $("form").validate();
    $('.datepicker').datepicker();
    $('.datepicker2').datepicker({endDate:'0'});
    $(".numbersOnly").numeric({decimal: false,negative: false});
    $('.numbersMoney').numeric();
    bootbox.setLocale('th');
});

toastr.options = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-top-right",
    "onclick": null,
    "showDuration": "10",
    "hideDuration": "10",
    "timeOut": "2000",
    "extendedTimeOut": "10",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

function number_format(nStr){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

function AlertConfirm(message,url){
    bootbox.confirm(message, function(result) {
        if (result) {
            if(url){
                window.location.href=''+url+'';
            }
        }
    });
}
function AlertMsg(message,url){
    bootbox.alert(message, function() {});
}
</script>
<div id="main_menu">
    <div class="fixed-top" style="margin-top:-1px;">
        <ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons">
            <!-- <li <?php //if($this->uri->segment(1) =="Main"){echo 'class="current"'; } ?>>
                <a href="<?php //echo base_url()?>Main"><img src="<?php //echo base_url('assets/imgpure/logo_Pure-09.png');?>" style="width: 90px;" ></a>
            </li> -->
             <!-- หน้าหลัก Main -->
            <li>
                <a href="<?php echo base_url()?>Pos"><img src="<?php echo base_url('assets/imgpure/logo_Pure-09.png');?>" style="width: 85px;" ></a>
            </li>
            <!-- จ่ายยา -->
            <li aria-haspopup="true" <?php if($this->uri->segment(1) =="Pos" || $this->uri->segment(1) =="ContinuingMedicine"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Pos"><i class="fa fa-desktop" aria-hidden="true"></i></i>จ่ายยา <i class="fa fa-indicator fa-chevron-down"></i></a>
                <div class="grid-container3">
                    <ul>
                        <li <?php if($this->uri->segment(1) =="ContinuingMedicine"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>ContinuingMedicine/all"><i class="fa fa-file-text-o"></i> จ่ายยาต่อเนื่อง </a></li>
                        <li <?php if($this->uri->segment(2) =="pos_history"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>Pos/pos_history"><i class="fa fa-file-text-o"></i> ประวัติการจ่ายยา </a></li>
                    </ul>
                </div>
            </li>
            <!-- <li aria-haspopup="true" <?php if($this->uri->segment(1) =="Pos"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Pos"><i class="fa fa-lg fa-building-o"></i> หน้าร้าน <i class="fa fa-indicator fa-chevron-down"></i></a>
                <div class="grid-container3">
                    <ul>
                        <li <?php if($this->uri->segment(2) =="pos_history"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>Pos/pos_history"><i class="fa fa-file-text-o"></i> ประวัติการขาย </a></li>
                    </ul>
                </div>
            </li> -->
            <li <?php if($this->uri->segment(1) =="Customer"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Customer"><i class="fa fa-users"  style="color: #1976d2;"></i> คนไข้ </a>
            </li>
            <li <?php if($this->uri->segment(2) =="promotion"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Product/promotion"><i class="fa fa-bullhorn" aria-hidden="true" style="color: #546e7a;" ></i> โปรโมชั่น </a>
            </li>
            <li <?php if($this->uri->segment(2) =="index"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Product/index"><i class="fa fa-archive" aria-hidden="true" style="color:#ffb300;" ></i> ข้อมูลยา </a>
            </li>
            <li <?php if($this->uri->segment(1) =="Report"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Report/"><i class="fa fa-bar-chart" aria-hidden="true" style="color: #ec407a;" ></i> รายงาน </a>
            </li>
            <li <?php if($this->uri->segment(1) =="Diagnostic"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Diagnostic"><i class="fa fa-plus-circle" aria-hidden="true" style="color: #0d47a1;" ></i> Diagnostic Guide </a>
            </li>
            <li <?php if($this->uri->segment(1) =="DrugInterac"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>DrugInterac"><i class="fa fa-medkit" aria-hidden="true" style="color: #26a69a;" ></i> Drug Interaction </a>
            </li>
            <li <?php if($this->uri->segment(1) =="Pdc"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Pdc" title="คำนวณขนาดยารับประทานสำหรับเด็ก"><i class="fa fa-medkit" aria-hidden="true" style="color: #26a69a;" ></i> PDC </a>
            </li>
            <li >
                <a href="#"><i class="fa fa-info-circle" aria-hidden="true" style="color: #50a3b9;" ></i> Drug Info </a>
            </li>
            <li >
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true" style="color: #ffc107;" ></i> ข่าวสาร </a>
            </li>
            <!-- <li >
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true" style="color: #ffc107;" ></i> เว็บสำคัญ </a>
            </li> -->
            <li aria-haspopup="true"<?php if($this->uri->segment(1) =="Help"){echo 'class="current"'; } ?>>
                <a href="<?php echo base_url()?>Help/setting"> ช่วยเหลือ  <i class="fa fa-indicator fa-chevron-down"></i></a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true" style="color: #ffc107;" ></i> เว็บสำคัญ </a></li>
                        <li <?php if($this->uri->segment(2) =="setting"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>Help/setting"><i class="fa fa-cogs" aria-hidden="true"></i> ตั้งค่า </a></li>
                        <li <?php if($this->uri->segment(2) =="userManual"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>Help/userManual"><i class="fa fa-book" aria-hidden="true"></i> คู่มือ </a></li>
                        <li <?php if($this->uri->segment(2) =="aboutUs"){echo 'class="current"'; } ?>><a href="<?php echo base_url()?>Help/aboutUs"><i class="fa fa-info" aria-hidden="true"></i> About us </a></li>
                    </ul>
                </div>
            </li>
            <li class="right">
            <!-- javascript:AlertConfirm('ต้องการออกจากระบบใช่หรือไม่?','logout.php'); -->
                <a href="javascript:AlertConfirm('ต้องการออกจากระบบใช่หรือไม่?','<?php echo base_url()?>login/logout');"><i class="fa fa-sign-out" style="color: #d50000;" ></i> Logout </a>
            </li>
        </ul>
    </div>
</div>

