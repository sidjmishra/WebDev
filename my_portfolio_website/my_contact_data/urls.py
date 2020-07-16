from django.urls import include, path
from my_contact_data import views
 
app_name = 'my_contact_data'
 
urlpatterns = [
     path('', views.home,name='home'),
     path('portfolio', views.portfolio,name='portfolio'),
     path('contactdata', views.contactus,name='contactdata'),
     path('resume', views.resume ,name='resume'),
     path('contact_form_submit',views.contact_form_submit,name='contact_form_submit'),

]

