@component('admin.dynamic')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Of Contents</h4>
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false" href="{{  route('create.content')  }}">+ Create New Content</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Content </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_contents as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->content }}
                                        </td>
                                        <td>
                                            <a href="{{  route('edit.content', $item->id)  }}"><button type="button" class="btn btn-primary">Edit</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                        {{ $all_contents->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endcomponent
