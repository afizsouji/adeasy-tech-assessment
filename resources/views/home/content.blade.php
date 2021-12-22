<div class="p-5 pt-3">
    <div class="p-5 d-flex justify-content-center">
        @include('home.filter')
    </div>
    <div class="p-5 d-flex">
        @if (!empty($viewUsers))
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewUsers as $viewUser)
                        @include('home.listing', ['curViewUser' => $viewUser])
                    @endforeach
                </tbody>
            </table>
        @else
            <div>
                No user created yet.
            </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
    {{ $viewUsers->appends(request()->except('page'))->links() }}
    </div>
</div>