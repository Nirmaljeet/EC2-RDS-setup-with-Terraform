

### Creating Security Group for EC2

## Creating Launch Configuration
resource "aws_launch_configuration" "example" {
  image_id               = aws_ami_from_instance.ami.id
  instance_type          = "t2.micro"
  security_groups = ["${aws_security_group.elb.id}"]
  key_name               = "Temporary"
  
}

resource "aws_ami_from_instance" "ami" {
  name               = "wordpress-ami"
  source_instance_id = aws_instance.WordPress.id
}

## Creating AutoScaling Group
resource "aws_autoscaling_group" "example" {
  launch_configuration = "${aws_launch_configuration.example.id}"
  availability_zones = ["us-east-1a", "us-east-1b", "us-east-1c", "us-east-1d", "us-east-1e", "us-east-1f"]
  min_size = 1
  max_size = 3
  load_balancers = ["${aws_elb.example.name}"]
  
}
## Security Group for ELB
resource "aws_security_group" "elb" {
  name = "terraform-example-elb"
  egress {
    from_port = 0
    to_port = 0
    protocol = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
  ingress {
    from_port = 80
    to_port = 80
    protocol = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }
  ingress {
    from_port = 3306
    to_port = 3306
    protocol = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }


 
}
### Creating ELB
resource "aws_elb" "example" {
  name = "terraform-asg-example"
  security_groups = ["${aws_security_group.elb.id}"]
  availability_zones = ["us-east-1a", "us-east-1b", "us-east-1c", "us-east-1d", "us-east-1e", "us-east-1f"]
  
  listener {
    lb_port = 80
    lb_protocol = "http"
    instance_port = "80"
    instance_protocol = "http"
  }
}