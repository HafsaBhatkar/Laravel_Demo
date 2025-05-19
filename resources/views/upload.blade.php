<div>
    <h1>File Upload</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="submit" value="Upload File" name="submit">
        </div>
    </form>

    <style>
        input{
            margin-bottom: 0.5rem;
            padding: 0.3rem;
        }
    </style>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
</div>