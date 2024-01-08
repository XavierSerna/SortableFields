<div>
    <ul wire:sortable="reorder" class="overflow-hidden rounded shadow divide-y">
        @foreach ($things as $thing)
            <li wire:sortable.item="{{ $thing['id'] }}" draggable="true" wire:key="{{ $thing['id'] }}" class="w-64 p-4 bg-white">
                @switch($thing['type'])
                    @case('email')
                        <input type="email" placeholder="{{ $thing['title'] }}">
                    @break
                    @case('radio')
                        <div>
                            <input type="radio" name="radio_option" value="option1"> Hungry<br>
                            <input type="radio" name="radio_option" value="option2"> Not Hungry<br>
                        </div>
                    @break
                    @case('checkbox')
                        <div>
                            <input type="checkbox" name="checkbox_option1" value="option1">meat<br>
                            <input type="checkbox" name="checkbox_option2" value="option2">vegetables<br>
                            <input type="checkbox" name="checkbox_option3" value="option3">water<br>
                        </div>
                    @break
                    @case('dropdown')
                        <select>
                            <option value="option1">quinua</option>
                            <option value="option2">potato</option>
                            <option value="option3">chicken</option>
                        </select>
                    @break
                    @break
                        @case('textarea')
                        <textarea placeholder="Additional Information for your dish"></textarea>
                    @break

                @endswitch
            </li>
        @endforeach
    </ul>
</div>