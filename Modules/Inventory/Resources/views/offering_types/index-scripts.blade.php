<script>
    $('body').addClass('kt-aside--enabled kt-aside--fixed');
</script>
<script>
    function initTable1(url) {
        var table = $('#offering_types_table');
        return table.DataTable({
            dom: '<"top"i>Bfrtip',
            buttons: [
                // {
                //     extend: 'pdf',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // },
                // {
                //     extend: 'csv',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // },
                // {
                //     extend: 'excel',
                //     footer: true,
                //     exportOptions: {
                //         columns: [0,1,2]
                //     }
                // }
            ],
            responsive: true,
            searchDelay: 500,
            processing: true,
                        serverSide: true,
            language:{
                search:"{{__('datatables.search')}}",
                emptyTable:"{{__('datatables.no_records_available')}}",
                info:"{{__('datatables.showing_page')}} _START_ {{__('datatables.of')}} _END_ {{__('datatables.of')}} _TOTAL_ ",

                infoEmpty:"{{__('datatables.showing_page')}} _START_ {{__('datatables.of')}} _END_ {{__('datatables.of')}} _TOTAL_",
            },
            ajax: {
                url: url,
                type: 'POST',
                data: {
                    // Parameters
                    columnsDef: [
                        //
                    ],
                },
            },
            columns: [{
                    data: 'id',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'value',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'created_at',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'last_updated_at',
                    orderable: true,
                    searchable: true
                },
            ],
            columnDefs: [{
                    targets: 0,
                    title: "{{trans('inventory::inventory.id')}}",
                    render: function(data, type, full, meta) {
                        return full.id;
                    },
                },
                {
                    targets: 1,
                    title: "{{trans('inventory::inventory.offering_type')}}",
                    render: function(data, type, full, meta) {
                        return full.value;
                    },
                },
                {
                    targets: 2,
                    title: "{{trans('inventory::inventory.created_at')}}",
                    render: function(data, type, full, meta) {
                        return full.created_at;
                    },
                },
                {
                    targets: 3,
                    title: "{{trans('inventory::inventory.last_updated_at')}}",
                    render: function(data, type, full, meta) {
                        return full.last_updated_at;
                    },
                },
                {
                    targets: 4,
                    title: "{{trans('inventory::inventory.actions')}}",
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var delete_url = "{{route('inventory.offering_types.delete', 'id=:id')}}";
                        delete_url = delete_url.replace(':id', full.id);

                        // Protect seeded offering types used in search queries
                        var protected_offering_types = [1, 2, 3];
                        // if (protected_offering_types.includes(parseInt(full.id))) {
                        //     return ``;
                        // }

                        @if(auth()->user()->hasPermission('update-inventory-offering-type') || auth()->user()->hasPermission('delete-inventory-offering-type'))
                            var value = `
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                `;
                        @if(auth()->user()->hasPermission('update-inventory-offering-type'))
                            value += `
                                        <a href="{{route('inventory.offering_types.modals.update')}}" class="dropdown-item" data-toggle="modal" data-target="#fast_modal" data-path="{{route('inventory.offering_types.modals.update')}}" data-title="{{trans('inventory::inventory.update_offering_type')}}" data-id="` + full.id + `" data-modal-load>
                                            <span>
                                                <i class="la la-edit"></i>
                                                <span>{{trans('inventory::inventory.update_offering_type')}}</span>
                                            </span>
                                        </a>
                                    `;
                        @endif
                        if(!protected_offering_types.includes(parseInt(full.id))){
                        @if(auth()->user()->hasPermission('delete-inventory-offering-type'))
                            value += `
                                        <a class="dropdown-item" data-8x-delete-it='{"container":false, "path":"` + delete_url + `", "callback": "deleteOfferingTypeCallback"}' href="#"><i class="la la-trash"></i> {{__('inventory::inventory.delete_offering_type')}}</a>
                                    `;
                        @endif

                        }
                            value += `
                                    </div>
                                </span>
                                `;
                            return value;
                        @else
                            return ``;
                        @endif
                    },
                }
            ],
        });
    };
    jQuery(document).ready(function() {
        // Init datatable
        offering_types_table = initTable1("{{ route('inventory.offering_types.index') }}");

        // Search datatable
        $('#m_search').on('click', function(e) {
            e.preventDefault();
            var query = $('#search_offering_types_form').serialize();
            $("#offering_types_table").dataTable().fnDestroy();
            offering_types_table = initTable1("{{ route('inventory.offering_types.index') }}" + '?' + query);
        });

        // Reset search form
        $('#m_reset').on('click', function(e) {
            e.preventDefault();
            $(this).closest('form').trigger("reset");
            $("#offering_types_table").dataTable().fnDestroy();
            offering_types_table = initTable1("{{ route('inventory.offering_types.index') }}");
        });
    });
</script>
<script>
    function deleteOfferingTypeCallback() {
        // Reload datatable with delay to clear cache
        setTimeout(function() {
            offering_types_table.ajax.reload(function(json) {
                //
            }, false);
        }, 3000);
    }
</script>