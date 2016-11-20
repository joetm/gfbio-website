# How to use this repo

This repo is based on vccw.cc's Vagrant configuration designed for development of WordPress plugins, themes, or websites.

To get started, check out <http://vccw.cc/>

## Usage

Install wordpress into `wordpress` folder (keeping the custom theme `gfbio`).

1. `npm install`
1. `make webpack`
1. `vagrant up`
1. Go to `vccw.dev` or `192.168.33.10`


## Development

Use `make webpack-watch` to monitor the files for changes.


## Testing

There are automated tests by [Serverspec](http://serverspec.org/).
The tests files are in the `spec/` directory.

Before running the serverspec tests, you'll need some dependencies.

```
$ bundle install --path=vendor/bundle
```

Then to run the tests, just execute following.

```
$ bundle exec rake spec
```
