@error('login')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('username')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('email')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('password')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('name')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('title')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('category')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('image')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('subject')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('resume')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('tag')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('link')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('message')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
@endif
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
@endif
