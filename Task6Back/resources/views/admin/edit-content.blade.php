@component('admin.dynamic')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Corona Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
        <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Content</h4>
                        <form class="forms-sample" action="{{  route('update.content',$content->id)  }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label><br>
                                <input class="form-control" id="exampleTextarea1" name="text" value="{{ old('text',$content->content) }}"></input>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </html>
@endcomponent
