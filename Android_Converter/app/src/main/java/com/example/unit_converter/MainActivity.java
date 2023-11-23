package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView temp,Press,Digital,time,speed,mass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        temp=findViewById(R.id.textView2);
        temp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Temperature.class);
                startActivity(intent);

            }
        });
        Press=findViewById(R.id.textView3);
        Press.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Pressure.class);
                startActivity(intent);

            }
        });
        Digital=findViewById(R.id.textView4);
        Digital.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Digital_Storage.class);
                startActivity(intent);

            }
        });
        time=findViewById(R.id.textView5);
        time.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Time.class);
                startActivity(intent);

            }
        });


        mass=findViewById(R.id.textView6);
        mass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Mass.class);
                startActivity(intent);

            }
        });
        speed=findViewById(R.id.textView7);
        speed.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Speed.class);
                startActivity(intent);

            }
        });
    }
}
