@extends('layouts.app')

@section('content')
    <style>
        .project {
            border-left: 2px solid;
            padding-left: 8px;
            word-wrap: break-word;
            margin-bottom: 30px;
            border-color: #4F5D95;
        }
        .project small {
            color: #999;
            font-size: 12px;
            line-height: 1.3;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Most Popular PHP Packages') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-8">
                            @foreach($data as $project)
                                <div class="project">
                                    <h5>
                                        <a href="{{ $project['repository_url'] }}" target="_blank">
                                        {{ $project['name'] }}
                                        </a>
                                    </h5>
                                    <div>{{ $project['description'] }}</div>
                                    <small>
                                        <p>
                                            Latest release
                                            <strong>{{ $project['latest_release_number'] }}</strong>
                                            ||
                                            Updated about
                                            <strong>
                                                {{ \Carbon\Carbon::parse($project['latest_stable_release_published_at'])->diffForHumans() }}
                                            </strong>
                                        </p>
                                    </small>
                                </div>
                            @endforeach
                            <div class="project"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
