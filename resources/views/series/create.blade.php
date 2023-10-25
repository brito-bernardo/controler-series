<x-layout title="Adicionar séries">

    <x-series.form :action="route('series.store')" :nome="old('nome)" :update="false" />

</x-layout>
