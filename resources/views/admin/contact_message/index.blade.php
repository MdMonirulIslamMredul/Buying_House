@extends('admin.master')
@section('title')
    Contact Messages
@endsection

@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card-body">
                    <h4 class="card-title mb-3">
                        Contact Message Inbox
                        @if (isset($unreadMessagesCount) && $unreadMessagesCount > 0)
                            <span class="badge badge-danger ml-2">{{ $unreadMessagesCount }} Unread</span>
                        @endif
                    </h4>
                    <div class="table-responsive">
                        <table id="config-table" class="table display table-striped border no-wrap">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Submitted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>
                                            @if ((int) $message->status === 1)
                                                <span class="badge badge-success">Read</span>
                                            @else
                                                <span class="badge badge-warning">Unread</span>
                                            @endif
                                        </td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->number }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td style="max-width: 280px; white-space: normal;">{{ $message->message }}</td>
                                        <td>{{ $message->created_at ? $message->created_at->format('d M Y h:i A') : '-' }}
                                        </td>
                                        <td>
                                            @if ((int) $message->status === 1)
                                                <form
                                                    action="{{ route('admin.contact.messages.status', ['id' => $message->id]) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="status" value="0">
                                                    <button type="submit" class="btn btn-sm btn-warning">Mark
                                                        Unread</button>
                                                </form>
                                            @else
                                                <form
                                                    action="{{ route('admin.contact.messages.status', ['id' => $message->id]) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="status" value="1">
                                                    <button type="submit" class="btn btn-sm btn-success">Mark Read</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
