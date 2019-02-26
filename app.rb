require 'sinatra'

get '/' do
  erb :index
end

get '/home' do
  redirect '/'
end

get '/portfolio' do
  erb :portfolio
end

get '/resume' do
  erb :resume
end

get '/contact' do
  erb :contact
end

not_found do
  status 404
  erb :index, locals: {error_message: 'Seems you have loaded an invalid link! (404)'}
end