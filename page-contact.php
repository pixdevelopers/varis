<?php
/**
 * Template Name: Contact us Template
 **/
 ?>
     <?php 
     include('templates/inner-header.php'); 
     ?>
 <div class="container contactus">
        <div class="col-md-5 col-md-offset-1">
            <form>
                <div class="col-md-6">
                    <input type="text" placeholder="نام" />
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="نام خانوادگی" />
                </div>
                <div class="col-md-6">
                    <input type="mail" placeholder="ایمیل" />
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="تلفن" />
                </div>
                <div class="col-md-12">
                    <textarea placeholder="پیام خود را بنویسید..."></textarea>
                </div>
                <div class="col-md-12">
                    <input type="submit" value="ارسال" />
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <ul>
                <li>تبریز - سربالایی ولیعصر - ساختمان صدر - طبقه ی 6</li>
                <li>تلفن : <a href="tel:04133273264">04133273264</a></li>
                <li>موبایل : <a href="tel:09383850168">09383850168</a></li>
                <li>info@ClinicVaris.com : ایمیل</li>
            </ul>
        </div>
    </div>
        <?php get_footer(); ?>
