@extends('layouts.app')

@section('content')
<div class="field-registration-container">
    <h1 class="field-registration-title">作付を作成</h1>

    <form action="{{ route('cropping.store') }}" method="POST" class="field-registration-form">
        @csrf
        <div class="form-group">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">作付名</label>
            <input type="text" name="name" id="name" class="form-input">
        </div>

        <!-- 品目選択ボタン -->
        <div class="form-group">
            <label for="item" class="block text-gray-700 text-sm font-bold mb-2">品目名</label>
            <select name="item_id" id="item" class="form-select">
                @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{ $item->crop_name }}({{ $item->variety_name}})</option>
                @endforeach
            </select>
        </div>
                
        <div class="form-group">
            <label for="field" class="block text-gray-700 text-sm font-bold mb-2">作付圃場</label>
            <select name="field_id" id="field" class="form-select">
                @foreach ($fields as $field)
                    <option value="{{ $field->id }}">{{ $field->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="planting_date" class="block text-gray-700 text-sm font-bold mb-2">播種または定植日</label>
            <input type="date" name="planting_date" id="planting_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
        </div>

        <!-- 栽培方法の選択 -->
        <div class="form-group">
            <label for="cultivation_method" class="block text-gray-700 text-sm font-bold mb-2">栽培方法</label>
            <select name="cultivation_method" id="cultivation_method" class="form-select" required>
                <option value="有機栽培">有機栽培</option>
                <option value="特別栽培">特別栽培</option>
                <option value="慣行栽培">慣行栽培</option>
                <option value="自然栽培">自然栽培</option>
            </select>
        </div>

        <div class="form-group">
            <label for="expected_yield" class="block text-gray-700 text-sm font-bold mb-2">収穫見込量</label>
            <input type="number" name="expected_yield" id="expected_yield" class="form-input">
            <select name="yield_unit" id="yield_unit" class="form-select">
                <option value="kg">kg</option>
                <option value="t">t</option>
            </select>
        </div>

        <div class="form-group">
            <label for="color" class="block text-gray-700 text-sm font-bold mb-2">カラー</label>
            <input type="color" name="color" id="color" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">
                登録
            </button>
        </div>
    </form>
</div>
@endsection
