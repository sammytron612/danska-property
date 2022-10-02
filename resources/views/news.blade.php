@extends('layouts.app', ['title' => 'News | Get the latest news from Danska and the property industry', 'description' => 'Latest news and insights from Danska Property Services'])
<div style="margin-top:130px;" class="container">
    <div class="section-header">
        <h2>News</h2>
        <p>Latest <span>News</span></p>
      </div>
    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news1')}}" class="">
                <img class="w-100 img-fluid rounded-t" alt="Smoke Alarm" src="/assets/img/smoke.webp" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">Updates to smoke and carbon monoxide alarm regulations</h4>
                <div class="preview text-black"><p>Smoke and carbon monoxide alarm regulations are changing - here's what you need to know.</p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
            </a>
        </div>

        <div class="col pt-5" data-aos="fade-up">
            <img class="w-100 img-fluid rounded-t" alt="live logo"  src="/assets/img/go-live.png">
            <div style="font-weight:300; font-size:13px" class="text-sm py-3 text-black">News</div>
            <h4 class="text-black">Go live date</h4>
            <div class="text-black"><p>Danska Property Services is proud to announce the Go-Live date of its brand new services on Monday 3rd October 2022.</p></div>
            <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
        </div>
        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news4')}}" class="">
                <img class="w-100 img-fluid rounded-t" alt="Weak Pound" src="/assets/img/weak-pound.jpg" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">What the weak pound means for the mortgage market</h4>
                <div class="text-black"><p>The value of the pound has tumbled following Chancellor Kwasi Kwarteng’s mini-Budget. We take a look at what it’s likely to mean for mortgage rates.. </p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
            </a>
        </div>

        <div class="col pt-5" data-aos="fade-up">
            <img class="w-100 img-fluid rounded-t" alt="Head of Sales" src="/assets/img/management/julie.webp">
            <div style="font-weight:300; font-size:13px" class="text-sm py-3">News</div>
            <h4 class="">Danska Property Services welcomes Julie Anderson as head of Sales & Marketing</h4>
            <div class="preview"><p>We welcome Julie to Danska property. With over 10 Years experience in sales, Julie will be driving the business forward and building the brand.</p></div>
            <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
        </div>

        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news3')}}" class="">
                <img class="w-100 img-fluid rounded-t"alt="Worker" src="/assets/img/adobe.jpeg" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">Research reveals how poor property maintenance can impact buyer offers</h4>
                <div class="preview text-black"><p>Four out of five homebuyers would consider reducing an offer if they found maintenance issues when viewing a property. </p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
            </a>
        </div>

        <div class="col pt-5" data-aos="fade-up">
            <a href="{{route('news2')}}" class="">
                <img class="w-100 img-fluid rounded-t" alt="Disrepair" src="/assets/img/disrepair.jpg" >
                <div style="font-weight:400; font-size:13px" class="text-sm text-black py-3">Insights</div>
                <h4 class="text-black">Disrepair - why should you care?</h4>
                <div class="text-black"><p>Landlords and letting agents have seen an exponential rise in disrepair claims over the past five years. </p></div>
                <div style="font-weight:200; font-size:13px" class="text-sm text-black py-3">September 2022</div>
            </a>
        </div>

    </div>

</div>
