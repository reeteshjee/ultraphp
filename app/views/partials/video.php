<div class="card mb-4">
    <div class="card-header"> भिडियो </div>
    <div class="card-body bg-halka p-0">
        <div class="row">
        <div class="col-md-8 pe-md-0"> <iframe id="video-preview" src="https://www.youtube.com/embed/lxSrfWWrvGE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
        <div class="col-md-4 ps-md-0">
            <div class="video-list ">
                <div class="active video-item ps-4" data-video="lxSrfWWrvGE">
                    <div class="video-title fw-bold">पहिलो हाफको लय कायम राख्न नसक्दा टाई ब्रेकरमा पुग्नुपर्यो ।। फाइनलमा SHANKATA सँग गाह्रो हुन्छ</div>
                </div>
                <div class=" video-item ps-4" data-video="racU4BDJqb0">
                    <div class="video-title fw-bold">NRT COACH JEEVAN SINKEMAN: आज मोमेन्टम नै लिन सकेनौं ।। पेनाल्टी सुटआउट पनि दूर्भाग्यजनक भयो ।।</div>
                </div>
                <div class=" video-item ps-4" data-video="dhBJf-7PhDs">
                    <div class="video-title fw-bold">KHELADI TALKS WITH AJAY PHUYAL II BHOLANATH SILWAL II COACH, NEPAL POLICE CLUB WOMEN'S FOOTBALL TEAM</div>
                </div>
                <div class=" video-item ps-4" data-video="K3_LNtl3yv0">
                    <div class="video-title fw-bold">Private video</div>
                </div>
                <div class=" video-item ps-4" data-video="3z2_dOGlLjk">
                    <div class="video-title fw-bold">पेनाल्टीअघि नै जित्ने लक्ष्य थियो : Rabindra Silakar Head Coach, Sankata Club</div>
                </div>
                <div class=" video-item ps-4" data-video="WLx81jexXks">
                    <div class="video-title fw-bold">रणनीति अनुसार खेल्यौं : Santosh Neupane: Head Coach, Machhindra FC</div>
                </div>
                <div class=" video-item ps-4" data-video="RidtwGt5nJE">
                    <div class="video-title fw-bold">हाम्रो योजना नै टाई ब्रेकरमा जाने थियो : Puja RanaPlayer, NPC</div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script type="text/javascript"> 
    $("[data-video]").on('click',function(){ 
        $(".video-item").removeClass('active'); 
        $(this).addClass('active'); 
        $("#video-preview").attr('src','https://www.youtube.com/embed/'+$(this).attr('data-video')); 
    });
 </script> 
