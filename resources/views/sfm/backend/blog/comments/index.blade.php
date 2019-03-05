@extends('default.layouts.backend')

@section('title')
    Comments
@endsection

@section('content')
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll"
             id="m_datatable_latest_orders" style="">
            <table class="m-datatable__table" style="display: block; min-height: 300px;">
                <thead class="m-datatable__head">
                <tr class="m-datatable__row" style="left: 0px;">
                    <th data-field="RecordID"
                        class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                        <span style="width: 40px;"></span>
                    </th>
                    <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort" data-sort="asc">
                        <span style="width: 150px;">Title</span>
                    </th>
                    <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 150px;">Body</span>
                    </th>
                    <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 110px;">Date</span>
                    </th>
                    <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 100px;">Status</span>
                    </th>
                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 110px;">Actions</span>
                    </th>
                </tr>
                </thead>
                <tbody class="m-datatable__body ps ps--active-x ps--active-y" style="">


                @foreach($comments as $comment)
                    <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">
                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                            data-field="RecordID">
                        <span style="width: 40px;">
                            {{ $loop->count }}
                        </span>
                        </td>
                        <td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID">
                            <span style="width: 150px;">
                                <a href="{{ route('frontend.blog.index.slug', ['slug' => $comment->post->title]) }}"> {{ $comment->post->title }} </a>
                            </span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                        <span style="width: 150px;">
                                {!! $comment->body  !!}
                        </span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;">
                                {{ $comment->created_at }}
                            </span>
                        </td>
                        <td data-field="Status" class="m-datatable__cell">
                        <span style="width: 100px;">
                            {!! ($comment->active == 1) ? '
                            <a href="'. route('backend.blog.change_state_comment', ['id' => $comment->id]).'"> <span class="m-badge m-badge--info m-badge--wide"> Active </span> </a>
                            ' : '
                            <a href="'. route('backend.blog.change_state_comment', ['id' => $comment->id]).'"> <span class="m-badge  m-badge--danger m-badge--wide">
                                Deactive
                            </span> </a>
                            '  !!}

                        </span>
                        </td>

                        <td data-field="Actions" class="m-datatable__cell">
                         <span style="overflow: visible; position: relative; width: 110px;">
                             <a href="{{ route('backend.blog.comments.edit', ['id' => $comment->id]) }}"
                                class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                title="Edit details">
                                 <i class="la la-edit"></i>
                             </a>
                             <form action="{{ route('backend.blog.destroy', ['id' => $comment->id]) }}" method="post">
                                {{ method_field('delete') }}
                                 {{ csrf_field() }}
                                 <button
                                     class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill"
                                     title="Delete">
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
