<a target="_blank" href="{{ $item->otherfile_link }}" class="list-group-item list-group-item-action">
    @if ($item->doc_type == 'Download Link')
        <i class="fa-solid fa-download"></i>
    @elseif($item->doc_type == 'PDF File')
        <i class="fa-solid fa-file-pdf"></i>
    @elseif($item->doc_type == 'Word File')
        <i class="fa-solid fa-file-word"></i>
    @elseif($item->doc_type == 'Excel File')
        <i class="fa fa-file-excel"></i>
    @elseif($item->doc_type == 'Power Point File')
        <i class="fa fa-file-powerpoint"></i>
    @elseif($item->doc_type == 'Doc File')
        <i class="fas fa-file"></i>
    @else
        <i class="fas fa-tools"></i>
    @endif
    {{ $item->title }}
</a>
