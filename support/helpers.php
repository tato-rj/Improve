<?php

function lang()
{
	return \App::getLocale();
}

function email()
{
	return config('app')['email'];
}

function improve()
{
	return new \App\Brand\Improve;
}
