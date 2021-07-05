@extends('search.show')
@section('search_class',__("Surpluses"))
@section('search_form_action',route('search.getSurpluses'))
@section('search_middile')
     <div class="result-body">
        <div class="table-responsive">
            <table class="table widget-26">
                @foreach ($surpluses as $surplus)
                    <tbody>
                        <tr>
                            <td>
                                <div class="widget-26-job-emp-img">
                                    <img src="{{ asset(config('path.ch_logo') . $surplus->charity->logo) }}" alt="" />
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-title">
                                        <span>
                                        @if (config('app.locale') == 'ar')
                                            <p class="m-0">{{ $surplus->item->name_ar }}</p>
                                            <p class="text-muted m-0">{{ $surplus->item->name_en }}</p>
                                        @else
                                            <p class="m-0">{{ $surplus->item->name_en }}</p>
                                            <p class="text-muted m-0">{{ $surplus->item->name_ar }}</p>
                                        @endif
                                    </span>
                                </div>
                            </td>
                             <td>
                                <div class="widget-26-job-title">
                                        <a href="{{ route('charities.show', $surplus->charity) }}">
                                            <span>
                                                @if (config('app.locale') == 'ar')
                                                    <p class="m-0">{{ $surplus->charity->name_ar }}</p>
                                                    <p class="text-muted m-0">{{ $surplus->charity->name_en }}</p>
                                                @else
                                                    <p class="m-0">{{ $surplus->charity->name_en }}</p>
                                                    <p class="text-muted m-0">{{ $surplus->charity->name_ar }}</p>
                                                @endif
                                            </span>
                                        </a>
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-info">
                                        <p class="type m-0">{{ $surplus->quantity}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="widget-26-job-info">
                                    <button class="btn btn-light btn-icon-text btn-edit-profile">
                                        <a href="{{route('fills.create',$surplus)}}">
                                            {{ __('Fill') }}
                                        </a>
                                    </button>
                                    {{-- <button class="btn btn-light btn-icon-text btn-edit-profile">
                                        <a href="#">
                                            {{ __('Message') }}
                                        </a>
                                    </button> --}}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
@section('search_pagination')
{{$surpluses->links()}}
@endsection
