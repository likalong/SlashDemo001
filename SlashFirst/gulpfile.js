/**
 * Created by htpp royal on 08/28/2017.
 */
var gulp = require('gulp');
var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.sass('homeStyle.scss','./public/css/css/homeStyle.css')
        .sass('newStyle.scss','./public/css/css/newStyle.css');
});