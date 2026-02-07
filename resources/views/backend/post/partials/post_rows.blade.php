
@forelse ($posts as $key => $post)
    <tr>
        <td class="text-center fs-sm">{{ $offset + $key + 1 }}</td>
        <td class="fw-semibold fs-sm">{{ $post->title }}</td>
        <td class="fw-semibold fs-sm">{{ $post->slug }}</td>
        <td class="fw-semibold fs-sm">{{ $post->category?->name }}</td>

        <td class="fw-semibold fs-sm text-capitalize">
            @php
                $status = null;
                if ($post->status == 'published') {
                    $status = 'success';
                } elseif ($post->status == 'draft') {
                    $status = 'warning';
                } else {
                    $status = 'danger';
                }
            @endphp
            <div class="badge bg-{{ $status }}">{{ $post->status }}</div>
        </td>
        <td class="text-center">
            <div class="d-flex">
                <a href="{{ route('posts.show', $post->id) }}" class="border-0 btn btn-sm">
                    <i class="fa fa-eye text-secondary fa-xl"></i>
                </a>
                <a href="{{ route('posts.edit', $post->id) }}" class="border-0 btn btn-sm">
                    <i class="fa fa-pencil text-secondary fa-xl"></i>
                </a>
                <button type="button" class="border-0 btn btn-sm" onclick="deletepost(this)"
                    data-id="{{ $post->id }}"><i class="fa fa-trash text-danger fa-xl"></i></button>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="text-center">No Post Found!</td>
    </tr>
@endforelse
