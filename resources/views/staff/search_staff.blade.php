@extends('layouts.profile')
@section('content')
				<div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Search Results</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                    	
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                @if(count($users)>0)
                                                    @foreach($users as $user)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="mt-card-item">
                                                            <div class="mt-card-avatar mt-overlay-1">
                                                            	@if($user->profiles->image)
                                                                <img src="{{$user->profiles->image}}" class="img-responsive" />
                                                                @else
                                                                <img src="{{asset('assets/img/placeholder.jpg')}}" class="img-responsive" />
                                                                @endif
                                                                <div class="mt-overlay">
                                                                    <ul class="mt-info">
                                                                        <li>
                                                                            <a class="btn default btn-outline" href="{{route('profile', array('id' => $user->id))}}">
                                                                            	Visit
                                                                                <i class="icon-magnifier"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="mt-card-content">
                                                                <h3 class="mt-card-name">{{$user->name}}</h3>
                                                                <p class="mt-card-desc font-grey-mint">{{$user->profiles->occupation}}</p>
                                                                <div class="mt-card-social">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-facebook"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-twitter"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-dribbble"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                 @endif
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection