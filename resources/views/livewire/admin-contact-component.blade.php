<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Messages
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->comment }}</td>
                                        <td>{{ $contact->created_at }}</td>

                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this message') || event.stopImmediatePropagation()" wire:click.prevent="deleteContact({{ $contact->id }})" style="margin-left: 10px"><i class="fa fa-times fa-1x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $contacts->links('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
