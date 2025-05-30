@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'maxlength' => 200,
    'required' => true
    ])

    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Subtitle',
    'maxlength' => 200
    ])

    @formField('textarea', [
    'name' => 'description',
    'label' => 'Description',
    'maxlength' => 500,
    'rows' => 4
    ])

    @formField('tags')

    @formField('medias', [
    'name' => 'cover', // Must match the role name in $mediasParams
    'label' => 'Cover Image',
    'note' => 'Recommended size: 1200x675px (16:9 ratio)'
    ])

    @formField('block_editor', [
    'blocks' => ['paragraph', 'image', 'quote', 'video', 'list']
    ])
@stop

@section('sideFieldsets')
    @formFieldset(['id' => 'seo', 'title' => 'SEO'])
    @formField('input', [
    'name' => 'seo_title',
    'label' => 'SEO Title',
    'maxlength' => 100
    ])

    @formField('textarea', [
    'name' => 'seo_description',
    'label' => 'SEO Description',
    'maxlength' => 200,
    'rows' => 3
    ])
    @endformFieldset
@stop
