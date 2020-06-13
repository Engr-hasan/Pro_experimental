@extends('layouts.dashboard')
@section('css')
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">How to Use</h5>
                            </div>
                            <div class="card-body">
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                    <!-- Accordion card -->
                                    <div class="card">
                                    @if($howToUse->count() > 0)
                                        @foreach($howToUse as $key=> $singleData)
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1{{ $key }}">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1{{ $key }}" aria-expanded="true"
                                               aria-controls="collapseOne1{{ $key }}">
                                                <h5 class="mb-0 float-left">{{ Str::limit($singleData->how_to_use_title, 40)}}</h5>
                                                <h5 class="mb-0 float-right">
                                                    <i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapseOne1{{ $key }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne1{{ $key }}"
                                             data-parent="#accordionEx">
                                            <div class="card-body">
                                                <p style="text-align: justify;">
                                                    {!! $singleData->how_to_use_description !!}</p>
                                            </div>
                                        </div>
                                         @endforeach
                                    @else
                                        <strong class="text-center">How to use not found</strong>    
                                    @endif
                                    </div>
                                    <!-- Accordion card -->


                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">FAQs</h5>
                            </div>
                            <div class="card-body">
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion" id="accordionEx2" role="tablist" aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card">
                                    @if($faq->count() > 0)
                                        @foreach($faq as $key=> $faqData)
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne2{{ $key }}">
                                            <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapseOne2{{ $key }}" aria-expanded="true"
                                               aria-controls="collapseOne2{{ $key }}">
                                                <h5 class="mb-0 float-left">{{ Str::limit($faqData->faq_title, 40) }}</h5>
                                                <h5 class="mb-0 float-right">
                                                    <i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseOne2{{ $key }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne2{{ $key }}"
                                             data-parent="#accordionEx2">
                                            <div class="card-body">
                                                <p style="text-align: justify;">
                                                    {!! $faqData->faq_description !!}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <strong class="text-center">FAQ not found</strong>    
                                    @endif
                                    </div>
                                    <!-- Accordion card -->

                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')

@stop
