<? include 'pageSecurity.php' ?>
<div class="container">
    <h1 class="mt-4 mb-3"></h1>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <h3>Form Function Example</h3>
            <div class="row">
                <?
                formElem('col-lg-6','text','Name','guest_name','','');
                formElem('col-lg-6','select','Subject','guest_subject','',array(array(1,'Value1'),array(2,'Value2')));
                formElem('col-lg-6','tel','E-Mail','guest_mail','','');
                formElem('col-lg-6','email','Telephone','guest_tel','','');
                formElem('col-lg-12','textarea','Message','guest_tel','','');
                formElem('col-lg-12','submit','Send <i class="fa fa-paper-plane" aria-hidden="true"></i>','guest_submit','btn-primary col-lg-12','');
                ?>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200065.39628509202!2d26.9396292047801!3d38.4178606885083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2zxLB6bWly!5e0!3m2!1str!2str!4v1515680503624" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
    </div>
</div>