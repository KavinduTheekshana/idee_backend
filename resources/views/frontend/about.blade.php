@extends('layouts.frontend')
@section('page_title', 'About | idée CA')
@section('site_logo', asset('frontend/images/logo-white.svg'))
@section('content')

    <body>
        @include('frontend.components.header')
        <main>
            <div class="page-content">
                <div class="common-content bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-6">
                                <h2 class="fw-bolder">Our Vision</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis eaque minima modi
                                    magnam ab, esse dolores voluptatem perspiciatis atque sapiente tenetur itaque voluptatum
                                    commodi non doloremque. Dolorum, doloribus repudiandae!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-content__separator"></div>
                <div class="common-content bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-6">
                                <h2 class="fw-bolder">We As A Company</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis eaque minima modi
                                    magnam ab, esse dolores voluptatem perspiciatis atque sapiente tenetur itaque voluptatum
                                    commodi non doloremque. Dolorum, doloribus repudiandae!</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis eaque minima modi
                                    magnam ab, esse dolores voluptatem perspiciatis atque sapiente tenetur itaque voluptatum
                                    commodi non doloremque. Dolorum, doloribus repudiandae!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-content__separator"></div>
                <div class="common-content bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-6">
                                <h2 class="fw-bolder">What we believe</h2>
                                <p>idée ( pronounced as ee- day ) is a French term for ‘Idea/Concept’. idée CA believes in
                                    seamlessly integrating social, cultural and climatic nuances in the context in form of
                                    architectural expressions to bring about a sense of place. We rely on our own interior
                                    designs, landscape designs and product designs to further strengthen the architectural
                                    expression we create into a unique spatial experience.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-content__separator"></div>
                <div class="common-content bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-6">
                                <h2 class="fw-bolder">How we achieve</h2>
                                <p>We at idée CA all times strive to offer architectural solutions responsive to the
                                    architectural plea of the assignment within the formidable social and economic
                                    paradigms. With an experienced local & foreign professional team idée CA provides
                                    consortium services for diverse building projects teaming up with reputed allied
                                    professionals on a sub-consultancy basis while rendering consultancy services for
                                    renowned foreign practices operating in Sri Lanka as a Local Consultant.</p>
                                <p>The proficient team at idée CA further aims to add value to the business model of its
                                    corporate client through an Integrated Project Delivery System evolved via the
                                    state-of-the-art BIM environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
