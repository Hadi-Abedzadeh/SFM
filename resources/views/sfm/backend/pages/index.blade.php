@extends('default.layouts.backend')

@section('title')
    Posts
@endsection



@section('content')

    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll"
             id="m_datatable_latest_orders" style="">
            <table class="m-datatable__table" style="display: block; min-height: 300px;">
                <thead class="m-datatable__head">
                <tr class="m-datatable__row" style="left: 0px;">
                    <th data-field="page" class="m-datatable__cell" data-sort="asc">
                        <span style="width: 150px;">Page</span>
                    </th>
                    <th data-field="title" class="m-datatable__cell">
                        <span style="width: 150px;">Title</span>
                    </th>

                </tr>
                </thead>
                <tbody class="m-datatable__body ps ps--active-x ps--active-y" style="">


                @foreach($pages as $page)
                    <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">

                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                            <span style="width: 150px;">
                                {{ $page->id }}
                        </span>
                        </td>


                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                            <span style="width: 150px;">
                                {{ $page->page}}
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
