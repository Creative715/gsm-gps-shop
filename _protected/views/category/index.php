<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Спутниковые противоугонные системы. GPS трекеры';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Спутниковые противоугонные системы. - gps трекеры, gps маяки, датчики уровня топлива.',
    ]);

?>
<div class="slider wow fadeIn" data-wow-delay="0.7s"><div class="container"><img src="/images/logo_big.png" class="img-responsive pull-right wow bounceLeft" alt="GSM GPS - системы уделенного контроля" title="GSM GPS - системы уделенного контроля">
<br><br><br><br><br><br><br>
<h1>СИСТЕМЫ УДАЛЕННОГО<br>
КОНТРОЛЯ</h1>
<img src="/images/img01.png" class="img-responsive pull-right" alt="GPS трекерры" title="GPS трекер">
</div></div>
<section id="review" class="no-padding wow zoomIn">
            <div class="container">
            <div class="row  no-gutter">
                <div class="col-lg-6 col-sm-6">
                    <a href="#" rel="nofollow" target="_blank" class="gallery-box" data-src="/images/img02.jpg">
                        <img src="/images/img02.jpg" class="img-responsive" alt="Контроль топлива">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
							 <h3 class="text-center">Контроль топлива </h3>
                                <div> Lorem ipsum dolor sit amet, enim habemus omnesque at eum, enim interesset quaerendum ut nec. Adhuc habemus eum ut, eu quo soleat causae corrumpit, nec ut doctus aeterno. Altera graeco scripta eam no, everti accusata et duo. Duo eu prompta invidunt iracundia. Et nec munere facilis scriptorem, commune persecuti usu ad. Sed ea malorum dolorum, est cu volumus mediocritatem.<br>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <a href="#" rel="nofollow" target="_blank" class="gallery-box" data-src="/images/img03.jpg">
                        <img src="/images/img03.jpg" class="img-responsive" alt="GSM Сигнализации">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
							 <h3 class="text-center">GSM Сигнализации </h3>
                                <div> С другой стороны консультация с широким активом влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. С другой стороны рамки и место обучения кадров способствует подготовки и реализации форм развития. 
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
            <div class="col-lg-12 col-sm-12">
                    <a href="#" target="_blank" class="gallery-box" data-toggle="modal" data-src="/images/img04.jpg">
                        <img src="/images/img04.jpg" class="img-responsive" alt="GPS трекеры">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
							 <h3 class="text-center">GPS трекеры</h3>
                                <div> Lorem ipsum dolor sit amet, enim habemus omnesque at eum, enim interesset quaerendum ut nec. Adhuc habemus eum ut, eu quo soleat causae corrumpit, nec ut doctus aeterno. Altera graeco scripta eam no, everti accusata et duo. Duo eu prompta invidunt iracundia. Et nec munere facilis scriptorem, commune persecuti usu ad. Sed ea malorum dolorum, est cu volumus mediocritatem.<br>
                                  
                                </div>
                            </div>
                        </div>
                    </a>
					</div>
</div>
               
                            </div>
</section>
<section id="news">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-5 col-xs-5">
<h3>НОВИНКИ И АКЦИИ</h3>
</div>
<div class="col-md-9 col-sm-7 col-xs-7">
<div class="hr_orange"></div>
</div>
</div>
	<div class="row">
	<?php if( !empty($hits) ): ?>
	<hr>
    <?php foreach($hits as $hit): ?>
    <?php $mainImg = $hit->getImage();?>
    <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product">
                    <?= Html::img($mainImg->getUrl('208x208'), ['alt' => $hit->name, 'title' => $hit->name])?>
                    
					<div class="caption">
					<p><a href="<?= \yii\helpers\Url::to(['product/view', 'alias' => $hit->alias]) ?>"><?= $hit->name?></a></p>
					</div>
					<hr>
					<p><?= $hit->description?></p>
					<hr>
					 <p class="text-danger"><strong><?= $hit->price?> грн</strong></p>
                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>"  data-id="<?= $hit->id?>" class="btn btn-success btn-block add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                </div>
                <?php if($hit->new): ?>
                    <?= Html::img("@web/images/novelties_bg.png", ['alt' => 'Новинка', 'class' => 'novelties'])?>
                <?php endif?>
				
                <?php if($hit->sale): ?>
                    <?= Html::img("@web/images/action_bg.png", ['alt' => 'Акция', 'class' => 'action'])?>
                <?php endif?>
				<div class="clearfix"></div>
			<p><hr></p>

    </div>
    <?php endforeach;?>

<?php endif; ?>
 <p></p>
 <p><hr></p>
 <p></p>
</div>

</div>
</section>
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-7 col-xs-7">
<h3>Система мониторинга транспорта GSM-GPS</h3>
</div>
<div class="col-md-5 col-sm-5 col-xs-5">
<div class="hr_orange"></div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img05.jpg" alt="Система мониторинга транспорта GSM-GPS" title="Система мониторинга транспорта GSM-GPS"/></div>
<div class="col-md-6 col-sm-12 col-xs-12">
<p>
GSM-GPS ‒ SaaS версия системы GPS и ГЛОНАСС мониторинга с широким пользовательским функционалом и гибкими возможностями конфигурирования. Регулярные обновления системы делают GSM-GPS передовой системой мониторинга автотранспорта. Облачное решение позволяет избежать затрат, связанных с приобретением, установкой и администрированием сервера и серверного ПО.GSM-GPS ‒ SaaS версия системы GPS и ГЛОНАСС мониторинга с широким пользовательским функционалом и гибкими возможностями конфигурирования. Регулярные обновления системы делают GSM-GPS передовой системой мониторинга автотранспорта. Облачное решение позволяет избежать затрат, связанных с приобретением, установкой и администрированием сервера и серверного ПО.GSM-GPS ‒ SaaS версия системы GPS и ГЛОНАСС мониторинга с широким пользовательским функционалом и гибкими возможностями конфигурирования. Регулярные обновления системы делают GSM-GPS передовой системой мониторинга автотранспорта. 
</p>
</div>
</div>
</div>
</section>
<section id="possibilities">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4">
<h3>Возможности GSM-GPS</h3>
</div>
<div class="col-md-8 col-sm-8 col-xs-8">
<div class="hr_orange hidden-xs"></div>
</div>
</div>
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Онлайн-мониторинг объектов" title="Онлайн-мониторинг объектов"/><p>Онлайн-мониторинг объектов</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Гибкая система отчетов" title="Гибкая система отчетов"/><p>Гибкая система отчетов</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="GSM-GPS оборудование" title="GSM-GPS оборудование"/><p>Учет расхода топлива</p></div>
</div>
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Анализ водительского поведения" title="Анализ водительского поведения"/><p>Анализ водительского поведения</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Сервис прокладки маршрутов" title="Сервис прокладки маршрутов"/><p>Сервис прокладки маршрутов</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Система уведомлений" title="Система уведомлений"/><p>Система уведомлений</p></div>
</div>
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Удобное администрирование" title="Удобное администрирование"/><p>Удобное администрирование</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="KPI-отчеты в Dashboard" title="KPI-отчеты в Dashboard"/><p>KPI-отчеты в Dashboard</p></div>
<div class="col-md-4 col-sm-12 col-xs-12"><img class="img-responsive" src="/images/img07.jpg" alt="Работа с данными тахографов" title="Работа с данными тахографов"/><p>Работа с данными тахографов</p></div>
</div>
</div>
</div>
</section>
<section id="equipment">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4">
<h3>GSM-GPS оборудование</h3>
</div>
<div class="col-md-8 col-sm-8 col-xs-8">
<div class="hr_orange hidden-xs"></div>
</div>
</div>
<div class="row">
<div class="col-md-7 col-sm-7 col-xs-7">
<p>
Система мониторинг транспорта GSM-GPS совместим с большим количеством автомобильных контроллеров, персональных и программных GPS трекеров. Gurtam активно сотрудничает с производителями GPS/ГЛОНАСС оборудования, что позволяет постоянно интегрировать новые устройства с Wialon.
</p>
<p>
Такой подход обеспечивает гибкость нашей системы мониторинга и делает ее доступной для любого клиента, какой бы GPS девайс он не использовал.
</p>
</div>
<div class="col-md-5 col-sm-5 col-xs-5"><img class="img-responsive" src="/images/img06.jpg" alt="GSM-GPS оборудование" title="GSM-GPS оборудование"/>
</div>
</div>
</div>
</section>