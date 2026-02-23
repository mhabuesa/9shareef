@php
    $current = request()->route('slug') ?? 'unread';
@endphp
<div class="col-md-5 col-xl-3">
    <div class="d-md-none push">
        <button type="button" class="btn w-100 btn-primary" data-toggle="class-toggle" data-target="#one-inbox-side-nav"
            data-class="d-none">
            Inbox Menu
        </button>
    </div>
    <div id="one-inbox-side-nav" class="d-none d-md-block push">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Inbox</h3>
                <div class="block-options">
                    <button type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal"
                        data-bs-target="#one-inbox-new-message">
                        <i class="fa fa-pencil-alt me-1 opacity-50"></i> Compose
                    </button>
                </div>
            </div>
            <div class="block-content">
                <ul class="nav nav-pills flex-column push">

                    <li class="nav-item my-1">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ $current == 'unread' ? 'active' : '' }}"
                            href="{{ route('admin.contact', 'unread') }}">
                            <span class="fs-sm">
                                <i class="fa fa-fw fa-inbox me-1 opacity-50"></i> Unread
                            </span>
                        </a>
                    </li>

                    <li class="nav-item my-1">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ $current == 'read' ? 'active' : '' }}"
                            href="{{ route('admin.contact', 'read') }}">
                            <span class="fs-sm">
                                <i class="fa fa-fw fa-star me-1 opacity-50"></i> Read
                            </span>
                        </a>
                    </li>

                    <li class="nav-item my-1">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ $current == 'replied' ? 'active' : '' }}"
                            href="{{ route('admin.contact', 'replied') }}">
                            <span class="fs-sm">
                                <i class="fa fa-fw fa-reply me-1 opacity-50"></i> Replied
                            </span>
                        </a>
                    </li>

                    <li class="nav-item my-1">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ $current == 'sendMessage' ? 'active' : '' }}"
                            href="{{ route('admin.contact', 'sendMessage') }}">
                            <span class="fs-sm">
                                <i class="fa fa-fw fa-paper-plane me-1 opacity-50"></i> Send Messages
                            </span>
                        </a>
                    </li>

                    <li class="nav-item my-1">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ $current == 'trash' ? 'active' : '' }}"
                            href="{{ route('admin.contact', 'trash') }}">
                            <span class="fs-sm">
                                <i class="fa fa-fw fa-trash-alt me-1 opacity-50"></i> Trash
                            </span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</div>
