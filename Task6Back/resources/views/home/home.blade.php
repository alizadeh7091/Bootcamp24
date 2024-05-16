<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('home/style.css') }}">
    {{--  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">  --}}
    <title>home</title>
</head>

<body>
    {{--  <h1>pagination</h1>  --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Contents Table</h4>
                <a href="{{ route('all.contents') }}"><button class="btn btn-primary me-2">Admin Panel</button></a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Content </th>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><br>
                {{ $all_contents->links() }}

            </div>
        </div>
    </div>
</body>

</html>
