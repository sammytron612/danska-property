@extends('layouts.app', ['title' => 'Contact', 'description' => 'Latest news and insights from Danska Property Services'])
<div style="margin-top:130px;" class="container">
    <div class="section-header">
        <h2>News</h2>
        <p>Latest <span>News</span></p>
      </div>
    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news1')}}" class="">
                <img class="img-fluid rounded-t" src="/assets/img/smoke.webp" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">Updates to smoke and carbon monoxide alarm regulations</h4>
                <div class="preview text-black"><p>Smoke and carbon monoxide alarm regulations are changing - here's what you need to know.</p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">July 2022</div>
            </a>
        </div>
        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news2')}}" class="">
                <img class="img-fluid rounded-t" src="/assets/img/disrepair.jpg" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">Disrepair - why should you care?</h4>
                <div class="text-black"><p>Landlords and letting agents have seen an exponential rise in disrepair claims over the past five years. </p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">August 2022</div>
            </a>
        </div>
        <div class="col pt-5" data-aos="fade-up">
            <img class="img-fluid rounded-t" src="/assets/img/management/julie.webp">
            <div style="font-weight:300; font-size:13px" class="text-sm py-3">News</div>
            <h4 class="">Danska property welcomes Julie Anderson as head of sales</h4>
            <div class="preview"><p>We welcome Julie to Danska property. With over 10 Years experience in sales, Julie will be driving the business forward and building the brand.</p></div>
            <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">July 2022</div>
        </div>

    </div>

</div>
