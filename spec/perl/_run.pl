#!/usr/bin/env perl

use strict;
use warnings;
use TAP::Harness::JUnit;

my $harness = TAP::Harness::JUnit->new( {
    xmlfile => 'test_out/perl/output.xml',
} );

my @tests = glob "spec/perl/*.t";

$harness->runtests(@tests);
