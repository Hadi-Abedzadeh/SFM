@extends('default.layouts.backend')

@section('title')
    FAQ
@endsection



@section('content')

    <div class="m-portlet__body">
    @include('error')
    @include('flash::message')
        <!--begin: Datatable -->
        <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll" id="m_datatable_latest_orders" style="">
            <table class="m-datatable__table" style="display: block; min-height: 300px;">
                <thead class="m-datatable__head text-center">
                <tr class="m-datatable__row" style="left: 0px;">
                    <th class="m-datatable__cell">
                        <span style="width: 50px;">Page id</span>
                    </th>
                    <th class="m-datatable__cell">
                        <span style="width: 250px;">Question</span>
                    </th>
                    <th class="m-datatable__cell">
                        <span style="width: 250px;">Answer</span>
                    </th>
                    <th class="m-datatable__cell">
                        <span style="width: 150px;">Actions</span>
                    </th>

                </tr>
                </thead>
                <tbody class="m-datatable__body ps ps--active-x ps--active-y" style="">

                @foreach($faq as $q)
                    <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">

                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID">
                        <span style="width: 50px;">
                                {{ $q->page_id }}
                        </span>
                        </td>


                        <td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID">
                            <span style="width: 250px;">
                                {{ str_limit(strip_tags($q->question), 100) }}
                                {{  (strlen(strip_tags($q->question)) > 100) ? ' ...... ' : ''}}
                            </span>
                        </td>
                        <td class="m-datatable__cell">
                        <span style="width: 250px;">
                            {{ str_limit(strip_tags($q->answer), 100) }}
                            {{  (strlen(strip_tags($q->answer)) > 100) ? ' ...... ' : ''}}

                        </span>
                        </td>
                        <td data-field="Actions" class="m-datatable__cell text-center">
                         <span style="overflow: visible; position: relative; width: 150px;">
                             <a href="{{ route('faq.edit', ['id'=>$q->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                title="Edit details">
                                 <i class="la la-edit"></i>
                             </a>
                             <form action="{{ route('faq.destroy', ['id'=> $q->id]) }}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('delete') }}
                                 <button class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                     <i class="la la-trash"></i>
                                </button>
                             </form>
                         </span>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        <!--end: Datatable -->
    </div>
@endsection
