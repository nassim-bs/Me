@extends('lab.home')

@section('styles')
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script src="css/main.js"></script>
<script src="css/purecounter.js"></script>
@endsection

@section('Namme')
Nassim BenSassi
@endsection

@section('Ad')
Sousse. Tunisia
@endsection

@section('Ph')
52 28 70 25
@endsection

@section('Em')
BenSassiNassim@gmail.com
@endsection

@section('Services')
<div class="container">
    <div class="section-title">
        <h2>Services</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row">        
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-code-slash"></i></div>
            <h4 class="title">Web Coding</h4>
            <p class="description">Use Html, Css, PHP, Laravel, WordPress to Create Sites.</p>
        </div>

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-app-indicator"></i></div>
            <h4 class="title">Apps development</h4>
            <p class="description">Using Android Studio.</p>
        </div>

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-badge-3d"></i></div>
            <h4 class="title">Creating 3D Objects</h4>
            <p class="description">Using 3DS-Max.</p>
        </div>

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-badge-ar"></i></div>
            <h4 class="title">AR-Core Application</h4>
            <p class="description">Creating AR App for Mobiles.</p>
        </div>

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title">Website with CMS</h4>
            <p class="description">Use WordPress.</p>
        </div>

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-controller"></i></div>
            <h4 class="title">Unity Games</h4>
            <p class="description">Use Unity Engine to Create Games.</p>
        </div>
    </div>
</div>
@endsection

@section('Resume')
<div class="container">

    <div class="section-title">
        <h2>Resume</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
            {{-- <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
                <h4>@yield('Namme')</h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                        developing user-centered digital/print marketing material from initial concept to final,
                        polished deliverable.</em></p>
                <ul>
                    <li>@yield('Ad')</li>
                    <li>@yield('Ph')</li>
                    <li>@yield('Em')</li>
                </ul>
            </div> --}}

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
                <h4>Professional Master's Degree In Web &amp; Multimedia Services</h4>
                <h5>2018 - 2020</h5>
                <p><em>Higher Institute of Computer Science and Technology communication (Isitcom) Hammam Sousse, Sousse</em></p>
                {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum
                    qui ut dignissimos deleniti nerada porti sand markend</p> --}}
            </div>

            <div class="resume-item">
                <h4>Professional Master's Degree In Web &amp; Multimedia Services</h4>
                <h5>2015 - 2018</h5>
                <p><em>Higher Institute of Computer Science and Technology communication (Isitcom) Hammam Sousse, Sousse</em></p>
                {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum
                    qui ut dignissimos deleniti nerada porti sand markend</p> --}}
            </div>

            <div class="resume-item">
                <h4>Baccalaureate Experimental Sciences Section</h4>
                <h5>2014 - 2015</h5>
                <p><em>Kalaa Kebira, Sousse, Tunisia</em></p>
                {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione
                    eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader
                    mart dila</p> --}}
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
                <h4>Develop web WordPress</h4>
                <h5>September. 2021 - February. 2022</h5>
                <p><em>Innovative Spirit, Sousse, Tunisia</em></p>
                <ul>
                    <li>Internship at Innovative-Spirit Sousse In Post Web Developer Wordpress.</li>
                    {{-- <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                        project. </li>
                    <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the
                        design</li>
                    <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
               --}} </ul> 
            </div>
            <div class="resume-item">
                <h4>Internship End of Master's Studies</h4>
                <h5>Février. 2020 - Décembre. 2020</h5>
                <p><em>3D Wave, Sousse, Tunisia</em></p>
                 <ul>
                    <li>Case Simulation And Diagnosis Application Clinical.</li>
                   {{-- <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                    <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                --}}</ul> 
            </div>
            <div class="resume-item">
                <h4>Internship End of Study in Simulation Center</h4>
                <h5>February. 2018 - April. 2018</h5>
                <p><em>Faculty of Medicine of Monastir, Monastir, Tunisia</em></p>
                <ul>
                    <li>Serious Game: Virtual Tour For The Simulation Center.</li>
                    {{-- <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                    <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                 --}}</ul>
            </div>
            <div class="resume-item">
                <h4>Sound Technician</h4>
                <h5>July. 2017 - August. 2017</h5>
                <p><em>M-FM Sousse, Tunisia</em></p>
                 <ul>
                    <li>Internship at M FM Sousse as a Sound Technician broadcasts and publicists.</li>
                    {{--<li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                    <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
               --}} </ul> 
            </div>
        </div>
    </div>

</div>
@endsection