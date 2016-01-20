@extends('app')

@section('content')
    <div class="row" style="padding-top: 30px;">
        @include('admin.partials.message')
        @include('admin.services.partials.table')
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(
                function () {
                    $(".btn-delete").click(
                            function () {
                                var row = $(this).parents('tr');
                                var id = row.data('id');
                                var form = $('#form-delete');
                                var url = form.attr('action').replace(':SERV_ID', id);
                                var data = form.serialize();
                                $.post(url, data, function (result) {
                                    row.fadeOut();
                                    alert(result.messages);
                                }).fail(function () {
                                    alert('could not delete the service');
                                    row.fadeIn();
                                });
                            }
                    );
                }
        );
    </script>
@endsection
