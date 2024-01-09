<div>

    <div class="d-flex flex-wrap justify-content-start mb-4">
        <!-- Loop through each field type and create a draggable element for it -->
        @foreach(['text' => 'Text', 'textarea' => 'Textarea', 'checkbox' => 'Checkbox', 'radio' => 'Radio', 'select' => 'Dropdown', 'number' => 'Number', 'email' => 'Email', 'tel' => 'Phone'] as $type => $label)
            <!-- Draggable Field Button: Each button is styled with Bootstrap and has a 'draggable' attribute -->
            <div class="p-2">
                <button class="btn btn-outline-primary draggable-field" draggable="true" data-type="{{ $type }}">
                    {{ $label }}
                </button>
            </div>
        @endforeach
    </div>

    <div class="form-construction-area container p-3 mb-4" id="formConstructionArea">
        <ul wire:sortable="reorder" class="list-group">
            @foreach ($things as $thing)
                <li wire:sortable.item="{{ $thing['id'] }}" draggable="true" wire:key="{{ $thing['id'] }}" class="list-group-item">
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

    <div class="d-flex justify-content-end">
        <button class="btn btn-success" wire:click="saveForm">Save Form</button>
    </div>
</div>