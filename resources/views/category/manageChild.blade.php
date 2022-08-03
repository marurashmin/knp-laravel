@foreach($childs as $child)
<tr>
	<input type="hidden" class="catdelete_val_id" value="{{ $child->id }}">
	<td class="text-xs align-middle text-center font-weight-bold">{{ ++$i }}</td>
	<td class="text-xs align-middle text-center font-weight-bold">{{ $child->title }}</td>
	<td class="align-middle text-center text-sm">
		<span class="p-2">
			<a href="{{ route('category.edit',$child->id) }}"><i class="fas fa-user-edit text-secondary"></i></a>
		</span>
		<span class="deleteCategory p-2">
			<a href="javascript:void(0)"><i class="fas fa-trash text-secondary"></i></a>
		</span>
	</td>
</tr>
@if(count($child->childs))
	@include('category.manageChild',['childs' => $child->childs])
@endif
@endforeach