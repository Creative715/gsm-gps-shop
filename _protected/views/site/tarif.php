<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Тарифы и услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration">
	<div class="container">
	<div class="breadcrumb"><a href="/">Главная</a> - Тарифы и услуги</div>
	<div class="row">
<div class="col-md-4 col-sm-5 col-xs-5">
	<h3>Тарифы и услуги</h3>
</div>
<div class="col-md-8 col-sm-7 col-xs-7">
<div class="hr_orange"></div>
</div>
</div>
	<div class="row">
	<div class="col-md-12">
	<b>Стоимость подключения и абонплата(с нашей сим картой):</b></p>

<table class="table-responsive table-bordered table-striped" width="100%">
<tbody>
<tr>
<td>
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Оборудование и монтаж</strong></p>
</td>
<td style="border: inset 1.0pt; border-left: none; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Количество ТС</strong></p>
</td>
<td style="border: inset 1.0pt; border-left: none; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Абонентское обслуживание* за 1 ТС/мес.</strong></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; height: 8.85pt;">
<td style="border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;" rowspan="3">
<p class="MsoNormal"><span style="font-size: 10.0pt;">&nbsp; GPS-терминал, GPS|GPRS антенны, монтажные работы</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">1-10</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">80</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 2; height: 7.5pt;">
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">11-40</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">73</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 3; mso-yfti-lastrow: yes; height: 7.5pt;">
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">&gt; 40</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">60</span></p>
</td>
</tr>
</tbody>
</table>
<p class="MsoNormal"><span style="font-size: 8.0pt;">*Абонентское обслуживание включает в себя: программное обеспечение, сервисную поддержку, GPRS- трафик</span></p>
<p class="MsoNormal">&nbsp;</p>
<p class="MsoNormal"><strong>Стоимость подключения и абонплата(с вашей сим картой):</strong></p>
<table class="table-responsive table-bordered table-striped" width="100%">
<tbody>
<tr>
<td>
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Оборудование и монтаж</strong></p>
</td>
<td style="border: inset 1.0pt; border-left: none; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Количество ТС</strong></p>
</td>
<td style="border: inset 1.0pt; border-left: none; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Абонентское обслуживание* за 1 ТС/мес.</strong></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; height: 8.85pt;">
<td style="border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;" rowspan="3">
<p class="MsoNormal"><span style="font-size: 10.0pt;">&nbsp; GPS-терминал, GPS|GPRS антенны, монтажные работы</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">1-10</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 8.85pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">50</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 2; height: 7.5pt;">
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">11-40</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">43</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 3; mso-yfti-lastrow: yes; height: 7.5pt;">
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">&gt; 40</span></p>
</td>
<td style="border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm; height: 7.5pt;">
<p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10.0pt;">30</span></p>
</td>
</tr>
</tbody>
</table>
<p class="MsoNormal"><span style="font-size: 8.0pt;">*Абонентское обслуживание включает в себя: программное обеспечение, сервисную поддержку.</span></p>
<p class="MsoNormal"><br /> <!--[endif]--></p>
<p class="MsoNormal"><strong>Установка оборудования:</strong>&nbsp;</p>
<table class="table-responsive table-bordered table-striped" width="100%">
<tbody>
<tr>
<td style="width: 360.4pt; border: inset 1.0pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="481">
<p class="MsoNormal"><strong>&nbsp;Наименование операции</strong></p>
</td>
<td style="width: 73.1pt; border: inset 1.0pt; border-left: none; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="97">
<p class="MsoNormal" style="text-align: center;" align="center"><strong>Цена</strong></p>
</td>
</tr>
<tr>
<td style="width: 360.4pt; border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="481">
<p class="MsoNormal">&nbsp;Монтаж &nbsp;GPS/GSM терминала</p>
</td>
<td style="width: 73.1pt; border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="97">
<p class="MsoNormal" style="text-align: center;" align="center">200-450</p>
</td>
</tr>
<tr>
<td style="width: 360.4pt; border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="481">
<p class="MsoNormal">&nbsp;Установка датчика уровня топлива (ДУТ) с тарировкой бака.</p>
</td>
<td style="width: 73.1pt; border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="97">
<p class="MsoNormal" style="text-align: center;" align="center">800</p>
</td>
</tr>
<tr>
<td style="width: 360.4pt; border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="481">
<p class="MsoNormal">&nbsp;Установка расходомера DFM, VZO.</p>
</td>
<td style="width: 73.1pt; border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="97">
<p class="MsoNormal" style="text-align: center;" align="center">600 - 900</p>
</td>
</tr>
<tr>
<td style="width: 360.4pt; border: inset 1.0pt; border-top: none; mso-border-top-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="481">
<p class="MsoNormal">&nbsp;Шеф-контроль монтажа оборудования (обучение). За каждый&nbsp; час работы специалиста.</p>
</td>
<td style="width: 73.1pt; border-top: none; border-left: none; border-bottom: inset 1.0pt; border-right: inset 1.0pt; mso-border-top-alt: inset windowtext .75pt; mso-border-left-alt: inset windowtext .75pt; mso-border-alt: inset windowtext .75pt; padding: 0cm 0cm 0cm 0cm;" width="97">
<p class="MsoNormal" style="text-align: center;" align="center">300</p>
</td>
</tr>
</tbody>
</table>

	</div>

	
							</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	</div>

	</div>
	</div>
</div>